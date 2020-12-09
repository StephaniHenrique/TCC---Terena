import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { CasosAntigosPage } from './casos-antigos.page';

describe('CasosAntigosPage', () => {
  let component: CasosAntigosPage;
  let fixture: ComponentFixture<CasosAntigosPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CasosAntigosPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(CasosAntigosPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
