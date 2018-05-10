Vue.component('task-list',{

    template:`
           <div> 
                <task v-for="task in tasks">{{task.task}}</task>
            </div> 
        `,

    data(){
        return{
            tasks:[
                {task: 'go to the mall', complete: true},
                {task: 'go to the gym', complete: false},
                {task: 'go to the farm', complete: true},
                {task: 'go to the school', complete: false},
                {task: 'go to the work', complete: true},
            ]
        }
    },

});

Vue.component('task',{

    template:'<li><slot><slot></li>'

});

new Vue({

    el:'#root'
    
});

