import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Apartado2Component } from './apartado2.component';

describe('Apartado2Component', () => {
  let component: Apartado2Component;
  let fixture: ComponentFixture<Apartado2Component>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ Apartado2Component ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(Apartado2Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
