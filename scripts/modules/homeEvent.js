const name = document.getElementById('home-event-name');
const description = document.getElementById('home-event-description');
const date = document.getElementById('home-event-date');
const time = document.getElementById('home-event-time');
const timeEnd = document.getElementById('home-event-time-end');

const day = document.getElementById('home-event-days');
const hour = document.getElementById('home-event-hour');
const minute = document.getElementById('home-event-minutes');
const second = document.getElementById('home-event-seconds');

class HomeEvent {
    constructor(name, description, date, time, timeEnd) {
        this.name = name;
        this.description = description;
        this.date = date;
        this.time = time;
        this.timeEnd = timeEnd;
    }

    getEvent() {
        return {
            name: this.name,
            description: this.description,
            date: this.date,
            time: this.time,
            timeEnd: this.timeEnd
        }
    }

    setEvent() {
        name.innerHTML = this.name;
        description.innerHTML = this.description;
        date.innerHTML = this.date;
        time.innerHTML = this.time;
        timeEnd.innerHTML = this.timeEnd;
    }

    countDown() {
        const eventDate = new Date(this.date + ' ' + this.time).getTime();
        const now = new Date().getTime();
        const distance = eventDate - now;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        day.innerHTML = days;
        hour.innerHTML = hours;
        minute.innerHTML = minutes;
        second.innerHTML = seconds;
    }

    startCountDown() {
        setInterval(this.countDown.bind(this), 1000);
    }

    startEvent() {
        this.setEvent();
        this.startCountDown();
    }
}

export default HomeEvent;