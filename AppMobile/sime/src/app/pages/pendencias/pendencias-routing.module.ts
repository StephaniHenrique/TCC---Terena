import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { PendenciasPage } from './pendencias.page';

const routes: Routes = [
  {
    path: '',
    component: PendenciasPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class PendenciasPageRoutingModule {}
