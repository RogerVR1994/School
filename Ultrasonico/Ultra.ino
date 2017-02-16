#define TRIGGER_PIN 13
#define ECHO_PIN 12
#define USONIC_DIV 58.0
#define MEASURE_SAMPLE_DELAY 5
#define MEASURE_SAMPLES 25
#define MEASURE_DELAY 25

void setup()
{
	Serial.begin(9600);
	
	pinMode(TRIGGER_PIN, OUTPUT);
	pinMode(ECHO_PIN, INPUT);
	digitalWrite(TRIGGER_PIN, LOW);
	delayMicroseconds(500);
}

long singleMeasurement()
{
	long duration = 0;
	
	digitalWrite(TRIGGER_PIN, HIGH);
	delayMicroseconds(11);
	digitalWrite(TRIGGER_PIN, LOW);
	duration = pulseIn(ECHO_PIN, HIGH);
	return (long) (((float) duration / USONIC_DIV) * 10.0);
}

long measure()
{
	long measureSum = 0;
	for (int i = 0; i < MEASURE_SAMPLES; i++)
	{
		delay(MEASURE_SAMPLE_DELAY);
		measureSum += singleMeasurement();
	}
	return measureSum / MEASURE_SAMPLES;
}

void loop()
{
	delay(MEASURE_DELAY);
	long distance = measure();
	//Serial.print("Distance: ");
	Serial.print(distance);
	Serial.println("");
}