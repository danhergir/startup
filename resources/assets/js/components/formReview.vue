<template>
    <form @submit.prevent="postReview">
            <div class="form-group">
                <p class="mt-4 text-center"><strong>How would you rate it?</strong></p>
                <h4 class=" offset-md-3"><star-rating v-model="formData.rating"></star-rating></h4> 
            </div>
            <hr>
            <div class="form-group">
                <label for="headline"><strong>Review title</strong></label>
                <input type="text" class="form-control" v-model="formData.headline" id="headline" placeholder="Add a title for your review">
            </div>
            <div class="form-group">
                <label for="description"><strong>Description</strong></label>
                <textarea v-model="formData.description" class="w-100 rounded pl-2 pt-2 border border-muted" style="height:100px" id="description" cols="30" rows="10" placeholder="Tell us about your experiences with this product"></textarea>
            </div>
        
            <button class="btn btn-primary rounded offset-md-4" type="submit">Send review</button>
    </form>
</template>

<script>
 export default {
    props:['product','url', 'user'],
    data(){
        return {
            formData:{}
        }
    },
    methods:{
        postReview(){
            this.formData.product_id=this.product.id;
            this.formData.user_name=this.user.first_name;

            axios.post(this.url,this.formData)
                .then(data=>{
                    router.go('welcome.show')

                })
                .catch(error=>{
                    console.log(error.response);
                })
        }
    },
}
</script>

