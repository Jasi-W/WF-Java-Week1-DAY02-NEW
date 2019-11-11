
import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { ReactiveFormsModule } from "@angular/forms";

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

import { AngularFireModule } from "angularfire2";
import { AngularFireDatabaseModule } from "angularfire2/database";
import { environment } from "../environments/environment";

import { TravelComponent } from './travel/travel.component';
import { TravelListComponent } from './travel-list/travel-list.component';
import { TravelService } from "./shared/travel.service";

import { HomeComponent } from './home/home.component';
import { BlogComponent } from './blog/blog.component';
import { NavComponent } from './nav/nav.component';

@NgModule({
 declarations: [
   AppComponent,
	TravelComponent,
	TravelListComponent,
	HomeComponent,
	BlogComponent,
	NavComponent
 ],
 imports: [
   BrowserModule,
   AppRoutingModule,
   ReactiveFormsModule,

   AngularFireModule.initializeApp(environment.firebaseConfig),
   AngularFireDatabaseModule
 ],
 providers: [TravelService],
 bootstrap: [AppComponent]
})

export class AppModule { }