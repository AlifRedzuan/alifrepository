//loop dalam loop

void setup() {
Serial.begin(9600);
}

void loop() {
  for(int x =0; x<5; x++)
{
  for(int r =0; r<5; r++)
  {
    Serial.println(r);
    delay(2000);
  }
Serial.println(x);
}
}

