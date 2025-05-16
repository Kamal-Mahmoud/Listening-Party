        // {{-- make caluculation in clent side if start time passed --}}
        <div x-data="{
            audio: null,
            isLoading: true,
            currentTime: 0,
            startTimeStamp: {{ $listeningParty->start_time->timestamp }},
            initializeAudioPlayer() {
                this.audio = this.$refs.audioPlayer;
                this.audio.addEventListener('loadedmetadata', () => {
                    this.isLoading = false;
                    this.checkAndPlayAudio();
                });
                this.audio.addEventListener('timeupdate', () => {
                    this.currentTime = this.audio.currentTime;
                });
            },
            checkAndPlayAudio() {
                const elapsedTime = Math.max(0, Math.floor(Date.now() / 1000) - this.startTimeStamp);
                if (elapsedTime >= 0) {
                    this.audio.currentTime = elapsedTime;
                    this.audio.play().catch(error => console.error('Playback Failed:', error));
                    else {
                        setTimeout(() => this.checkAndPlayAudio(), 1000);
                    }
                }
            },
            formatTime(seconds) {
                const minutes = Math.floor(seconds / 60);
                const remainingSeconds = Math.floor(seconds % 60);
                return `${minutes}:${remainingSeconds.toString().padStart(2, '0')}`;
            },
        }" x-init="initializeAudioPlayer()"></div>