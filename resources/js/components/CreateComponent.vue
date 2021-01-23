<template>
    <form @submit.prevent = 'addStudent()'>
        <div class="form-group">
            <h3>Add New Student</h3>
        </div>
        <div class="form-group">
            <label for="name">Email address</label>
            <input type="text" name="name" v-model="name" class="form-control" id="name" placeholder="Your name">
        </div>
    
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" v-model="email" class="form-control" id="email" placeholder="Your email address">
        </div>

        <div class="form-group">
            <label for="phone">Email address</label>
            <input type="phone" name="phone" v-model="phone" class="form-control" id="phone" placeholder="name@example.com">
        </div>
       
       <div class="form-group">
           <button class="btn btn-primary">submit</button>
       </div>
    </form>
</template>

<script>
    export default {
        mounted() {

            //this.addStudent(),

            console.log('Component mounted.')
        },

        data(){

            return {
                name: '',
                email: '',
                phone: ''
            }
        },


        methods:{

            addStudent(){
                axios.post('students', {
                    name: this.name,
                    email: this.email,
                    phone: this.phone
                }).then(response => {
                    this.name = '',
                    this.email= '',
                    this.phone = ''
                    console.log(response);
                }).catch();
                alert('Yeah');

            }
        }
    }
</script>
