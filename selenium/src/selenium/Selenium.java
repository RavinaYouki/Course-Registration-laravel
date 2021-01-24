/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package selenium;
import java.util.List;
import org.openqa.selenium.By;
import org.openqa.selenium.Keys;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.WebElement;

/**
 *
 * @author BUSHRA
 */
public class Selenium {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        System.setProperty("webdriver.chrome.driver","J:\\chromedriver.exe" );
        WebDriver driver=new ChromeDriver();
        driver.manage().window().maximize();
        driver.get("http://127.0.0.1:8000");
        driver.findElement(By.linkText("Insert Student")).click();
        driver.findElement(By.id("sname")).sendKeys("Ravina Akter Youki");
        driver.findElement(By.id("e_add")).sendKeys("17101154@uap-bd.com");
        driver.findElement(By.id("rid")).sendKeys("17101154");
        driver.findElement(By.id("dept")).sendKeys("CSE");
        driver.findElement(By.className("Submit")).click();
    
        driver.findElement(By.linkText("Insert Course")).click();
        driver.findElement(By.id("course")).sendKeys("Computer Fundamental");
        driver.findElement(By.id("c_code")).sendKeys("CSE 102");
        driver.findElement(By.id("cdt")).sendKeys("3");
        driver.findElement(By.className("Submit")).click();
        
        driver.findElement(By.linkText("Registration")).click();
        driver.findElement(By.id("id")).sendKeys("17101154");
        driver.findElement(By.id("c_code")).sendKeys("CSE 102");
        driver.findElement(By.className("Submit")).click();
        WebElement search =driver.findElement(By.name("search"));
        search.sendKeys("17101154"+ Keys.ENTER);
    }
    
}
