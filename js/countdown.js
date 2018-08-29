const domContainer = document.querySelector('#countdown-app');
const e = React.createElement;

class Countdown extends React.Component {

  constructor(props) {
    super(props);
    this.state = { counter: props.reactNID };
  }

  componentDidMount() {
    this.timerID = setInterval(
      () => this.tick(),
      1000,
    );
  }

  componentWillUnmount() {
    clearInterval(this.timerID);
  }

  tick() {
    const currentCount = this.state.counter;
    if (currentCount > 0) {
      this.setState({
        counter: currentCount - 1,
      });
    } else {
      clearInterval(this.timerID);
    }
  }

  render() {
    return e(
      'h1',
      {},
      this.state.counter,
    );
  };
}

ReactDOM.hydrate(e(Countdown, {reactNID: window.drupalSettings.reactNID}, null), domContainer);