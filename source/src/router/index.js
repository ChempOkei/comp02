import AccessBoard from '@/pages/boards/accessBoard.vue'
import Board from '@/pages/boards/board.vue'
import PublicBoards from '@/pages/boards/publicBoards.vue'
import Login from '@/pages/login.vue'
import Register from '@/pages/register.vue'
import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    /* Все страницы */
    { path: '/', component: Login },
    { path: '/login', component: Login },
    { path: '/register', component: Register },
    { path: '/boards/public', component: PublicBoards },
    { path: '/boards', component: AccessBoard },
    { path: '/boards/:slug:', component: Board },
  ],
})

export default router
