import processing.serial.*;

Serial myPort;        
int xPos = 1;         
float height_old = 0;
float height_new = 0;
float inByte = 0;
float backColor=255;


void setup () {

  size(1000, 400);        
  myPort = new Serial(this, "COM3", 9600); //Sustituir "COM3" con el puerto que esté utilizando el Arduino
  myPort.bufferUntil('\n');
  background(backColor);
}


void draw () {
  inByte = map(inByte, 0, 1023, 0, height);
     height_new = height - inByte; 
     line(xPos - 1, height_old, xPos, height_new);
     height_old = height_new;
      if (xPos >= width) {
        xPos = 0;
        background(backColor);
      } 
      else {
        xPos=xPos+1;
      }
}


void serialEvent (Serial myPort) {
  // get the ASCII string:
  String inString = myPort.readStringUntil('\n');

  if (inString != null) {
    // trim off any whitespace:
    inString = trim(inString);

    // If leads off detection is true notify with blue line
    if (inString.equals("!")) { 
      stroke(0, 0, 0xff); //Set stroke to blue ( R, G, B)
      inByte = 512;  // middle of the ADC range (Flat Line)
      background(0);
    }
    
    // If the data is good let it through
    else  {
      println(inString);
      if(inString.equals("N")){
        println("Caida");
        background(0,0,255);
      }
      stroke(0xff, 0, 0); //Set stroke to red ( R, G, B)
      inByte = float(inString); 
     }
     
     //Map and draw the line for new data point
     
    
  }
}
