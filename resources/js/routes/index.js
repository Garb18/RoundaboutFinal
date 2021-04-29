import Homepage from '../pages/Homepage.vue'
import About from '../pages/About.vue'
import Contact from '../pages/Contact.vue'
import Register from '../pages/Register.vue'
import Login from '../pages/Login.vue'
import OrderHistory from '../pages/OrderHistory.vue'
import Favourites from '../pages/Favourites.vue'

export default {
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Homepage,
        },
        {
            path: '/about',
            name: 'about',
            component: About,
        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact,
        },
        {
            path: '/history',
            name: 'history',
            component: OrderHistory,
        },
        {
            path: '/favourites',
            name: 'favourites',
            component: Favourites,
        },
        {
            path: '/register',
            name: 'register',
            component: Register,
        },
        {
            path: '/login',
            name: 'login',
            component: Login,
        },
    ]
}
