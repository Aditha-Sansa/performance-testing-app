<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script>
            window.apiUrl = "{{ config('app.api_url') }}";
        </script>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0" id="app">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <div class="text-gray-900 dark:text-white text-lg">
                        Type in the amount to generate (max: 250,000)
                    </div>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6 flex flex-col justify-center">
                            <div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm" >
                                    <input
                                        @input="filterInput"
                                        @keydown="filterKey"
                                        v-model.number="count"
                                        type="number"
                                        min="0"
                                        pattern="/d+"
                                        step="1"
                                        name="count-input"
                                        id="count-input"
                                        placeholder="0"
                                        class="block w-full flex-1 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-2xl"
                                    >
                                </div>
                            </div>
                            <button
                                :disabled="disableGenerate"
                                @click="generate"
                                type="button"
                                class="disabled:opacity-75 w-1/2 my-2 mx-auto border border-gray-200 bg-gray-200 text-gray-700 rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-gray-300 focus:outline-none focus:shadow-outline"
                            >
                                Generate
                            </button>

                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div>
                                <div class="dark:text-gray-400">Total duration</div>
                                <div class="text-gray-600 dark:text-gray-400" id="clock">
                                    <span class="time" :class="{'animate-ping' : ping }">@{{ time }}</span>

                                    <div class="btn-container">
                                        <a id="stop" @click="stop">Stop</a>
                                        <a id="reset" @click="reset">Reset</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="mt-2 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="p-6 flex flex-row justify-center">
                        <div class="text-red-900 dark:text-red-500 text-sm" v-if="requestError">
                            @{{requestMessage}}
                        </div>

                        <div class="text-gray-900 dark:text-sky-600 text-sm" v-if="requestSuccess">
                            @{{requestMessage}}
                        </div>
                    </div>
                </div>
                <div class="text-white"></div>
            </div>
        </div>
    </body>
</html>
<script>
    const { createApp } = Vue

    createApp({
        data() {
            return {
                count: null,
                time: '00:00:00.000',
                timeBegan: null,
                timeStopped: null,
                stoppedDuration: 0,
                started: null,
                running: false,
                ping: false,
                requestError: false,
                requestSuccess: false,
                requestMessage: '',
                disableGenerate: false,
                apiUrl: window.apiUrl,
            }
        },
        watch: {
          count(value){
              this.count = value;
              if (this.count > 250000) {
                  this.disableGenerate = true
              } else {
                  this.disableGenerate = false
              }
          }
        },
        methods:{
            filterKey(e){
                const key = e.key;

                if (key === '.')
                    return e.preventDefault();

                if (key === 'e')
                    return e.preventDefault();

            },
            filterInput(e){
                //this is to prevent copy paste value
                e.target.value = e.target.value.replace(/[^0-9]+/g, '');
            },
            validate(){
                if (this.count === 0 || this.count === null || this.count === "") {
                    this.requestError = true;
                    this.requestMessage = "Please provide an amount greater than 0"
                    setTimeout(() => {
                        this.requestError = false;
                        this.requestMessage = ""
                    }, 4000)

                    return false
                } else {
                    return true
                }
            },
            generate() {
                if (this.validate()) {
                    this.start();
                    fetch(this.apiUrl+'/generate', {
                        headers: {
                            "Content-Type": "application/json",
                            "Accept": "application/json",
                        },
                        method: 'post',
                        body: JSON.stringify({
                            count: this.count
                        })
                    })
                        .then((response) => {
                            if (!response.ok) {
                                this.stop();
                                this.count = 0;
                                this.requestError = true;
                                this.requestMessage = "Invalid request. Please check your input again"

                                setTimeout(() => {
                                    this.requestError = false;
                                    this.requestMessage = "";
                                    this.reset();
                                }, 4000)

                                throw new Error("HTTP status " + response.statusText);
                            }
                            return response.json()
                        })
                        .then((data) => {
                            this.count = 0;
                            this.stop();
                            this.requestSuccess = true;
                            this.requestMessage = data.message;

                            this.ping = true;
                            setTimeout(() => {
                                this.ping = false;
                                this.reset();
                            }, 4000)
                        })
                        .catch((error) => {
                            console.log(error);
                        });
                }
            },
            start() {
                if(this.running) return;

                if (this.timeBegan === null) {
                    this.reset();
                    this.timeBegan = new Date();
                }

                if (this.timeStopped !== null) {
                    this.stoppedDuration += (new Date() - this.timeStopped);
                }

                this.started = setInterval(this.clockRunning, 10);
                this.running = true;
            },
            stop() {
                this.thisrunning = false;
                this.timeStopped = new Date();
                clearInterval(this.started);
            },
            reset() {
                this.running = false;
                clearInterval(this.started);
                this.stoppedDuration = 0;
                this.timeBegan = null;
                this.timeStopped = null;
                this.time = "00:00:00.000";
            },
            zeroPrefix(num, digit) {
                let zero = '';
                for(let i = 0; i < digit; i++) {
                    zero += '0';
                }
                return (zero + num).slice(-digit);
            },
            clockRunning(){
                let currentTime = new Date()
                let timeElapsed = new Date(currentTime - this.timeBegan - this.stoppedDuration)
                let hour = timeElapsed.getUTCHours()
                let min = timeElapsed.getUTCMinutes()
                let sec = timeElapsed.getUTCSeconds()
                let ms = timeElapsed.getUTCMilliseconds();

                this.time =
                    this.zeroPrefix(hour, 2) + ":" +
                    this.zeroPrefix(min, 2) + ":" +
                    this.zeroPrefix(sec, 2) + "." +
                    this.zeroPrefix(ms, 3);
            }
        }
    }).mount('#app')
</script>

<style>

    #clock {
        order: 0;
        flex: 0 1 auto;
        align-self: center;
        color: #c8c8c8;
    }
    #clock .time {
        font-size: 4.5em;
    }
    #clock .text {
        margin-top: 30px;
        font-size: 1em;
        color: rgba(200, 200, 200, 0.15);
        text-align: center;
    }
    #clock .text a {
        text-decoration: none;
        color: inherit;
        transition: color 0.1s ease-out;
    }
    #clock .text a:hover {
        color: #c8c8c8;
    }
    #clock .btn-container {
        display: flex;
        margin-top: 15px;
    }
    #clock .btn-container a {
        text-align: center;
        font-family: "Share Tech Mono", sans-serif;
        background: transparent;
        border: none;
        color: #c8c8c8;
        padding: 10px 15px;
        margin: 0 10px;
        text-transform: uppercase;
        font-size: 1em;
        cursor: pointer;
        flex-grow: 1;
        transition: color 0.1s ease-out;
    }
    #clock .btn-container a:hover {
        color: white;
    }
</style>
