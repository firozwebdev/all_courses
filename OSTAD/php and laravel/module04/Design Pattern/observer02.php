<?php
/*
Sure, let's consider another example to illustrate the Observer Pattern in PHP. In this example, let's imagine a simple weather station. Whenever the weather changes, it notifies various displays to update themselves with the new data.
*/
// Step 1: Subject Interface

interface Subject {
    public function registerObserver(Observer $observer);
    public function removeObserver(Observer $observer);
    public function notifyObservers();
}

// Step 2: Observer Interface


interface Observer {
    public function update(float $temperature, float $humidity, float $pressure);
}

// Step 3: Concrete Subject (WeatherStation)


class WeatherStation implements Subject {
    private $observers = [];
    private $temperature;
    private $humidity;
    private $pressure;

    public function registerObserver(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer) {
        $index = array_search($observer, $this->observers, true);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function notifyObservers() {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure) {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->notifyObservers();
    }
}

// Step 4: Concrete Observers (Display Devices)


class CurrentConditionsDisplay implements Observer {
    public function update(float $temperature, float $humidity, float $pressure) {
        echo "Current Conditions: Temperature - {$temperature}°C, Humidity - {$humidity}%, Pressure - {$pressure} hPa\n";
    }
}

class ForecastDisplay implements Observer {
    public function update(float $temperature, float $humidity, float $pressure) {
        echo "Forecast: Expecting warmer weather.\n";
    }
}

// Step 5: Usage Example


// Usage example:

// Create a weather station
$weatherStation = new WeatherStation();

// Create display devices
$currentConditionsDisplay = new CurrentConditionsDisplay();
$forecastDisplay = new ForecastDisplay();

// Register display devices as observers
$weatherStation->registerObserver($currentConditionsDisplay);
$weatherStation->registerObserver($forecastDisplay);

// Set new weather data
$weatherStation->setMeasurements(25.5, 65, 1013);
/*
In this example, the `WeatherStation` acts as the subject and
the `CurrentConditionsDisplay` and `ForecastDisplay` are concrete observers.
 When new weather data is set using `setMeasurements`, the `WeatherStation`
 notifies its observers, which then update their data accordingly.

This way, the observers (`CurrentConditionsDisplay` and `
ForecastDisplay`) are notified and can react to the changes in the weather
data.
*/