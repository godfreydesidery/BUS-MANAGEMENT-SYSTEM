import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { LoginComponent } from "./pages/login/login.component";
import { CompanyComponent } from "./pages/company/company/company.component";
import { CompanyListComponent } from "./pages/company/company-list/company-list.component";

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet, LoginComponent, CompanyComponent, CompanyListComponent],
  templateUrl: './app.component.html',
  styleUrl: './app.component.scss'
})
export class AppComponent {
  title = 'orbix-bus-admin';
}
