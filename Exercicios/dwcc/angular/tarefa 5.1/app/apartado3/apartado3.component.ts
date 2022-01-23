import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-apartado3',
  templateUrl: './apartado3.component.html',
  styleUrls: ['./apartado3.component.css']
})
export class Apartado3Component implements OnInit {

  constructor() { }

  array= [
    ['javier', 29, 'España'],
    ['paco', 15, 'España'],
    ['maria', 79, 'España'],
    ['javier', 29, 'Portugal'],
    ['paco', 15, 'Portugal'],
    ['maria', 79, 'Portugal'],
    ['javier', 29, 'francia'],
    ['paco', 15, 'francia'],
    ['maria', 79, 'francia'],
  ]

  ngOnInit(): void {
  }

}
