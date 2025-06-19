<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
<style>
    .bg{
  background-color: #1e1f26;
  height: 100vh;
  color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
}
.level{
  background-color: #00d1b2;
  padding: 5rem 0;
  color: #ffffff;
  margin: 0!important;
}

.title{
  color: inherit;
  width: 200px;
  height: 36px;
}
</style>
<body>
<div class="bg is-size-1">Scroll down</div>
<nav class="level">
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Tweets</p>
      <p class="title js-count-up" data-value="3456"></p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Following</p>
      <p class="title js-count-up" data-value="123"></p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Followers</p>
      <p class="title js-count-up" data-value="450000"></p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Likes</p>
      <p class="title js-count-up" data-value="789"></p>
    </div>
  </div>
</nav>
<div class="bg is-size-1">Scroll up</div>
</body>
<script>
    import { CountUp } from 'https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.7/countUp.js'

function countStart(){
  const $counters = document.querySelectorAll(".js-count-up"),
        options = {
          useEasing: true,
          useGrouping: true,
          separator: ",",
          decimal: "."
        };

  $counters.forEach( (item) => {
    const value = item.dataset.value;
    const counter = new CountUp(item, value, options);
    counter.start();
  });
}

new Waypoint({
  element: document.querySelector('.level'),
  handler: function() {
    countStart()
    //this.destroy() //for once
  },
  offset: '50%'
});
</script>