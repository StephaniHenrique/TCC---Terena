import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { PendenciasPage } from './pendencias.page';

describe('PendenciasPage', () => {
  let component: PendenciasPage;
  let fixture: ComponentFixture<PendenciasPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PendenciasPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(PendenciasPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
