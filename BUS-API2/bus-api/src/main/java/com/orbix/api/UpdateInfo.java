/**
 * 
 */
package com.orbix.api;

import javax.transaction.Transactional;

import org.springframework.stereotype.Service;

import com.orbix.api.service.DayService;
import lombok.Data;
import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;

/**
 * @author Godfrey
 *
 */
@Service
@RequiredArgsConstructor
@Transactional
@Slf4j
@Data
public class UpdateInfo implements Runnable{

	/**
	 * These beans should appear in this order
	 * Please do not change order as parameter list order will change.
	 * To add a bean, add bean at the end of this list
	 * then add respective parameters to the calling class
	 */
	
	private final DayService dayService;	
	
	
	/**
	 * To add bean, add above this comment
	 */
	
	@Override
	public void run() { //cron
		
		while(true) {
			try {
				try {
					//Thread.sleep(6000);
					Thread.sleep(300000);///waits for 5 minutes
					//Thread.sleep(5000);//to use for testing
				}catch(Exception e) {}				
				
				
			}catch(Exception e) {}
		}
	}
}
