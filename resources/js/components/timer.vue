<template>
    <div id="timer">
        <div class="timer">
            <div class="time">
                {{ formatTime }}
            </div>
            <button v-on:click="start" v-if="!timerOn">Start</button>
            <button v-on:click="stop" v-if="timerOn">Stop</button>
        </div>
    </div>
</template>

<script>

export default {
    name: 'timer',
    data() {
        return {
            // 初期値、本番時は20分にする
            defaultMin: 20,
            defaultSec: 0,
            defaultBreakMin: 5,
            defaultBreakSec: 0,
            defaultRepeatCount: 3,
            min: 20,
            sec: 0,
            repeatCount: 3,
            strDisplayBreak: '',
            timerOn: false,
            timerObj: null,
        }
    },
    methods: {
        count: function() {
            if (this.sec <= 0 && this.min >= 1) {
                this.min --;
                this.sec = 59;
            } else if(this.sec <= 0 && this.min <= 0) {
                // 繰り返しカウント
                if (this.repeatCount > 1) {
                    this.repeatCount --;
                    this.min = this.defaultMin
                    this.sec = this.defaultSec
                    this.strDisplayBreak = ''
                } else if (this.repeatCount === 1) {
                    this.repeatCount --; 
                    this.min = this.defaultBreakMin
                    this.sec = this.defaultBreakSec
                    this.strDisplayBreak = '(つ∀-)ｵﾔｽﾐｰ'
                    //this.complete();
                } else if (this.repeatCount === 0) {
                    this.repeatCount = this.defaultRepeatCount
                    this.min = this.defaultMin
                    this.sec = this.defaultSec
                    this.strDisplayBreak = ''
                }
            } else {
                this.sec --;
            }
        },

        start: function() {
            let self = this;
            this.timerObj = setInterval(function() {self.count()}, 1000)
            this.timerOn = true; //timerがOFFであることを状態として保持
        },

        stop: function() {
            clearInterval(this.timerObj);
            this.timerOn = false; //timerがOFFであることを状態として保持
        },

        complete: function() {
            clearInterval(this.timerObj)
        }
    },
    computed: {
        formatTime: function() {
            let timeStrings = [
                this.min.toString(),
                this.sec.toString(),
            ].map(function(str) {
                if (str.length < 2) {
                    return "0" + str
                } else {
                    return str
                }
            })
            return timeStrings[0] + ":" + timeStrings[1] + " " + this.repeatCount + this.strDisplayBreak
        }
    }
}
</script>

<style scoped>
#timer {
    display: flex;
    align-items: center;
    justify-content: center;
}
.time {
    font-size: 100px;
}
</style>
