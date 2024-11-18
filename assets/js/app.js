import App from './App.vue'
import { createApp } from 'vue'
import router from './routes/index'
import '../css/index.css'

const app = createApp(App)

app.use(router)
app.mount('#vue')