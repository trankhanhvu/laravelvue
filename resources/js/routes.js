import ProductList from './components/Product/ProductList'
import ProductCreate from './components/Product/ProductCreate'

const routes = [
    { path: '/admin/product/index', component: ProductList },
    { path: '/admin/product/create', component: ProductCreate },
];

export default routes;