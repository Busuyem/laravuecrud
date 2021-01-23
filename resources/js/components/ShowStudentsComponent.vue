<template>
    <div>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="student in students" :key="student.id">
                <th scope="row">{{student.id}}</th>
                <td>{{student.name}}</td>
                <td>{{student.email}}</td>
                <td>{{student.phone}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>

export default {

    mounted(){

        this.$root.$refs.A = this;

        this.allStudents()
    },

    data(){

       return{

           students: []
       } 
    },

    methods: {

        allStudents(){
            axios.get('students').then(response=> {

                this.students = response.data.students;

            }).catch(error => {
                console.log(error);
            });
        },
    }

    
}
</script>