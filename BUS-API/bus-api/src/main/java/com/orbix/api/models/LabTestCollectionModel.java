package com.orbix.api.models;

import com.orbix.api.domain.Collection;
import com.orbix.api.domain.LabTestType;
import com.orbix.api.domain.Patient;
import com.orbix.api.domain.PatientBill;

import lombok.Data;

@Data
public class LabTestCollectionModel {
	private Long id = null;
	private String description = "";
	private LabTestType labTestType = null;
	private PatientBill patientBill = null;
	private Patient patient = null;	
	private String cashier = "";
	private String dateTime = "";
}
