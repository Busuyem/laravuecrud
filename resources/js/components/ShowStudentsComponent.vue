<template>
    <div>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="student in students.data" :key="student.id">
                <th scope="row">{{student.id}}</th>
                <td>{{student.name}}</td>
                <td>{{student.email}}</td>
                <td>{{student.phone}}</td>
                </tr>
            </tbody>
        </table>
        <pagination :data="students" @pagination-change-page="getResults"></pagination>
    </div>
</template>

<script>

export default {

    mounted(){

        this.allStudents(),
        

        this.$root.$refs.A = this;

        this.getResults()
        
        
    },


    data(){

       return{

           students: {}
       } 

    },



    methods: {

        allStudents(){

            axios.get('students').then(response => {

                this.students = response.data.students;

            }).catch(error => {

                console.log(error);
                
            });
        },

         getResults(page = 1) {

            axios.get('students?page=' + page)
            
				.then((response) => {

                    this.students = response.data.students;
                    
				}).catch((error)=>{

                    console.log(error);
                });
        }
    }
        /*
         getResults(page = 1) {

            axios.get('students?page=' + page)
            
				.then(response => {

                    this.students = response.data.data.students;
                    
				});
        },

        */

    
}

</script>