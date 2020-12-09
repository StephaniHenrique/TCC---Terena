import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { Info3Page } from './info3.page';

describe('Info3Page', () => {
  let component: Info3Page;
  let fixture: ComponentFixture<Info3Page>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ Info3Page ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(Info3Page);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
