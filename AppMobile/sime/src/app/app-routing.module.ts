import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: '',
    loadChildren: () => import('./index/index.module').then(m => m.IndexPageModule)
  },
  {
    path: '',
    loadChildren: () => import('./home/home.module').then(m => m.HomePageModule)
  },
  {
    path: 'page-modal',
    loadChildren: () => import('./components/page-modal/page-modal.module').then( m => m.PageModalPageModule)
  },
  {
    path: 'perfil',
    loadChildren: () => import('./pages/perfil/perfil.module').then( m => m.PerfilPageModule)
  },
  {
    path: 'pendencias',
    loadChildren: () => import('./pages/pendencias/pendencias.module').then( m => m.PendenciasPageModule)
  },
  {
    path: 'info',
    loadChildren: () => import('./pages/auth/info/info.module').then( m => m.InfoPageModule)
  },
  {
    path: 'info2',
    loadChildren: () => import('./pages/auth/info2/info2.module').then( m => m.Info2PageModule)
  },
  {
    path: 'info3',
    loadChildren: () => import('./pages/auth/info3/info3.module').then( m => m.Info3PageModule)
  },
  {
    path: 'detail',
    loadChildren: () => import('./components/detail/detail.module').then( m => m.DetailPageModule)
  },
  {
    path: 'photo',
    loadChildren: () => import('./pages/auth/photo/photo.module').then( m => m.PhotoPageModule)
  },
  {
    path: 'perfil-user',
    loadChildren: () => import('./components/perfil-user/perfil-user.module').then( m => m.PerfilUserPageModule)
  },
 
  
];
@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule {}
