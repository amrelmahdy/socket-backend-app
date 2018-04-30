import VueRouter from 'vue-router';

let routes = [
    {
        path : '/',
        component : require('./views/index.vue')
    },
];


export default new VueRouter({
    routes,
    //linkActiveClass: "active", // active class for non-exact links.
    linkExactActiveClass: "active" // active class for *exact* links.
});