import signupPage from "./modules/signupPage.js";
import AppPage from "./modules/AppPage.js";
import ErrorPage from "./modules/ErrorPage.js";

const router = new VueRouter({
    routes: [
        { path: '/signup', name: "splash", component: signupPage},
        { path: '/app', name: "app", component: AppPage},
        { path: '*', name: "error", component: ErrorPage}
    ]
})

const vm = new Vue ({
    data: {

    },

    created: function() {
        console.log('app is up and running')
    },

    methods: {

    },

    router // shorthand for router:router
}).$mount("#app");