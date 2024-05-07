import './bootstrap';
import { createInertiaApp } from '@inertiajs/react'
import { createRoot } from 'react-dom/client'
import '.app.css';

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.jsx', { eager: true })
    return pages[`./Pages/${name}.jsx`]
  },
  setup({ el, App, props }) {
    createRoot(el).render(<App {...props} />)
  },
})

//  resolve: name => {
//    const pages = import.meta.glob('./Pages/**/*.jsx', { eager: true })
//    let page = pages[`./Pages/${name}.jsx`]
//    page.default.layout = page.default.layout || (page => <Layout children={page} />)
//    return page
//  },
