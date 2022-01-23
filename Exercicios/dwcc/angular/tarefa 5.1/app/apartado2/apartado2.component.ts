import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-apartado2',
  templateUrl: './apartado2.component.html',
  styleUrls: ['./apartado2.component.css']
})
export class Apartado2Component implements OnInit {

  constructor() { }

  array = [
    ["maza", "pera"],
    ["limon", "naranxa"]
 ]

  ngOnInit(): void {
  }

}
