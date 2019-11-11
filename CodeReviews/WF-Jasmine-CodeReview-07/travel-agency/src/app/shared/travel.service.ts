
import { Injectable } from '@angular/core';
import { FormControl , FormGroup , Validators } from "@angular/forms";
import { AngularFireDatabase, AngularFireList } from "angularfire2/database";

@Injectable({
  providedIn: 'root'
})
export class TravelService {
  constructor(private firebase: AngularFireDatabase) { }
  travelList: AngularFireList<any>;
  
	form = new FormGroup({
		$key: 		new FormControl(null),
		img: 		new FormControl('', Validators.required),
		city: 		new FormControl('', Validators.required),
		country:	new FormControl('', Validators.required),
		price:	 	new FormControl('', Validators.required)
	 });
	 
	getTravel(){
		this.travelList = this.firebase.list('travel');
		return this.travelList.snapshotChanges();
	}
	
	insertTravel(travel){
		this.travelList.push({
			img:		travel.img,
			city:		travel.city,
			country:	travel.country,
			price:		travel.price
		});
	}
}
