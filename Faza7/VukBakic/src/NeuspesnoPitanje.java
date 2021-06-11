/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.tests;

import java.util.logging.Level;
import java.util.logging.Logger;
import org.openqa.selenium.By;
import org.openqa.selenium.JavascriptExecutor;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome. * ;

/**
 *
 * @author bakic
 */
public class NeuspesnoPitanje {

  public static void main(String[] args) {

    // System Property for Chrome Driver   
    System.setProperty("webdriver.chrome.driver", "C:\\Users\\bakic\\Desktop\\TS\\PSI\\chromedriver.exe");
    System.setProperty("webdriver.chrome.logfile", "C:\\Users\\bakic\\Desktop\\TS\\PSI\\NeuspesnoPitanje.log");
    System.setProperty("webdriver.chrome.verboseLogging", "false");
    // Instantiate a ChromeDriver class.     

    ChromeOptions options = new ChromeOptions();
    options.addArguments("--incognito");

    WebDriver driver = new ChromeDriver(options);

    // Launch Website  
    driver.navigate().to("http://localhost:8080/");

    //Maximize the browser  
    driver.manage().window().maximize();

   
    driver.findElement(By.cssSelector("#navbar > ul > li:nth-child(3) > a")).click();
    driver.findElement(By.linkText("Postavite pitanje")).click();
     
    driver.findElement(By.cssSelector("input[name='name']")).sendKeys("Test Test");
    driver.findElement(By.cssSelector("input[name='email']")).sendKeys("chrome@driver.com");
    driver.findElement(By.cssSelector("input[name='subject']")).sendKeys("Te");
    driver.findElement(By.cssSelector("textarea[name='message']")).sendKeys("Short");
    
    driver.findElement(By.cssSelector("button[type='submit']")).click();
    
 
    boolean check = 
            driver.findElement(By.className("alert-danger")).getText().contains("Tekst naslova mora sadrzati najmanje 3 karaktera.")
            &&
            driver.findElement(By.className("alert-danger")).getText().contains("Tekst pitanja mora sadrzati najmanje 10 karaktera.");
    
    if (check) System.out.println("Test successful");
    else System.out.println("Test failed");

    try {
      Thread.sleep(3000);
    } catch(InterruptedException ex) {
      Logger.getLogger(NeuspesnoPitanje.class.getName()).log(Level.SEVERE, null, ex);
    }
    driver.quit();
  }

}