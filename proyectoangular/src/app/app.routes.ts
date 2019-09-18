import {RouterModule, Routes} from '@angular/router';
import {AboutComponent} from './components/about/about.component';
import {PrincipalComponent} from './components/principal/principal.component';
import {ProductosComponent} from './components/productos/productos.component';
import {ContactoComponent} from './components/contacto/contacto.component';
import {AguaComponent} from './components/agua/agua.component';


const APP_ROUTES: Routes = [
    { path: 'principal', component: PrincipalComponent},
    { path: 'about', component: AboutComponent},
    { path: 'productos', component: ProductosComponent},
    { path: 'contacto', component: ContactoComponent},
    { path: 'agua', component: AguaComponent},
    { path: '**', pathMatch: 'full', redirectTo: ''}

];

export const APP_ROUTING = RouterModule.forRoot(APP_ROUTES);
