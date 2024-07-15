package com.orbix.api.domain;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;
import javax.validation.constraints.NotBlank;

import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

@Entity
@Data 
@NoArgsConstructor 
@AllArgsConstructor
@Table(name = "vehicle_configurations")
public class VehicleConfiguration {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private Long id;
	
	@NotBlank
	@Column(unique = true)
	private String name;
	private int seatCapacity;
	private String seatType;
	
	//Amenities
	private boolean wifiPresent = false;
	private boolean usbChargingPortPresent = false;
	private boolean publicTelevisionPresent = false;
	private boolean acPresent = false;
	private boolean surveillanceCameraPresent = false;
	private boolean sleeperClassPresent = false;
	private boolean doubleDeckerPresent = false;
	private boolean coffeePresent = false;
	private boolean refreshmentsPresent = false;
	private boolean lunchPresent = false;
	private boolean bitesPresent = false;
	private boolean privateTelevisionPresent = false;
}
