<template>
    <div>
        <div class="w-100 h-64 overflow-hidden">
            <img src="https://cdn.pixabay.com/photo/2017/03/26/12/13/countryside-2175353_960_720.jpg" alt="user background image" class="object-cover w-full">
        </div>
    </div>
</template>

<script>
export default {
    name: "Show",

    data: () => {
        return {
            user: null,
            loading: true
        };
    },

    mounted() {
        axios
            .get("/api/users/" + this.$route.params.userId)
            .then(res => {
                this.user = res.data;
            })
            .catch(err => {
                console.log("Unable to fetch the user from the server.", err);
            })
            .finally(() => {
                this.loading = false;
            });
    }
};
</script>

<style scoped></style>
