import { createRouter, createWebHashHistory } from "vue-router";

const routes = [
    {
        name: 'home',
        path: '/',
        component: () => import("../../views/home/Home.vue")
    },
    {
        name: 'login',
        path: '/login',
        component: () => import("../../views/login/Login.vue")
    },
    {
        name: 'register',
        path: '/register',
        component: () => import("../../views/register/Register.vue")
    },
]

const router = createRouter({
    history: createWebHashHistory(),
    routes: routes
})

router.beforeEach((to, from, next) =>{
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
    next();
})

export default router