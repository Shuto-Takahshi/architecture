<template>
    <div>
        <button type="button" @click="clickLike" class="btn shadow-none border py-1 mr-2">
            <i class="fas fa-heart mr-1"
                :class="{'text-danger':this.isLikedBy}"
            />
            {{ countLikes }}
        </button>
    </div>
</template>

<script>
    export default {
        props: {
            initialIsLikedBy: {
                type: Boolean,
                default: false,
            },
            initialCountLikes: {
                type: Number,
                default: 0,
            },
            authorized: {
                type: Boolean,
                default: false,
            },
            endpoint: {
                type: String,
            },
        },
        data() {
            return {
                isLikedBy: this.initialIsLikedBy,
                countLikes: this.initialCountLikes,
            }
        },
        methods: {
            clickLike() {
                if (!this.authorized) {
                    alert('いいね機能はログイン中のみ使用できます')
                    return
                }

                this.isLikedBy
                    ? this.unlike()
                    : this.like()
            },
            async like() {
                const response = await axios.put(this.endpoint)

                this.isLikedBy = true
                this.countLikes = response.data.countLikes
            },
            async unlike() {
                const response = await axios.delete(this.endpoint)

                this.isLikedBy = false
                this.countLikes = response.data.countLikes
            },
        },
    }
</script>

