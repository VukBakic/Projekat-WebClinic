/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.tests;

import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import org.openqa.selenium.By;
import org.openqa.selenium.JavascriptExecutor;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome. * ;

/**
 *
 * @author bakic
 */
public class OdgovorNaPitanje2 {

  public static void main(String[] args) {

    // System Property for Chrome Driver   
    System.setProperty("webdriver.chrome.driver", "C:\\Users\\bakic\\Desktop\\TS\\PSI\\chromedriver.exe");
    System.setProperty("webdriver.chrome.logfile", "C:\\Users\\bakic\\Desktop\\TS\\PSI\\OdgovorNaPitanje2.log");
    System.setProperty("webdriver.chrome.verboseLogging", "false");
    // Instantiate a ChromeDriver class.     

    ChromeOptions options = new ChromeOptions();
    options.addArguments("--incognito");

    WebDriver driver = new ChromeDriver(options);

    // Launch Website  
    driver.navigate().to("http://localhost:8080/");

    //Maximize the browser  
    driver.manage().window().maximize();

   
    String struka = "Opsta medicina";
    String email = "lekar1@test.com";
    String pass = "Test123!";
    
    driver.findElement(By.linkText("Ulogujte se")).click();
     

    driver.findElement(By.cssSelector("input[name='email']")).sendKeys(email);
    driver.findElement(By.cssSelector("input[name='password']")).sendKeys(pass);
    driver.findElement(By.cssSelector("button[type='submit']")).click();
    
    String url = "http://localhost:8080/pitanja/1";

    driver.navigate().to(url);
    WebElement btn =  driver.findElement(By.linkText("Odgovori")); 
    
    if(!btn.isEnabled()){
        System.out.println("Test failed - Preduslov: Baza - neispunjen");
        driver.quit();
    }
    btn.click();
    
    driver.findElement(By.cssSelector("textarea[name='message']")).sendKeys("Test Textarea with enough characters.");
    driver.findElement(By.cssSelector("button[type='submit']")).click();
    
    
    
    boolean check = driver.findElement(By.className("alert-success")).getText().contains("Uspesno ste odgovorili na pitanje");
 
    
    
    if (check) System.out.println("Test successful");
    else System.out.println("Test failed");

    try {
      Thread.sleep(3000);
    } catch(InterruptedException ex) {
      Logger.getLogger(OdgovorNaPitanje2.class.getName()).log(Level.SEVERE, null, ex);
    }
    driver.quit();
  }

}