<!DOCTYPE html>
<html>
<head>
	<title>Bubnjevi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <section class="main-wrapper">
    <div class="key-map-wrapper">
      <h2>Key Mapping</h2>
      <ul class="key-map-list">
        <li>
          <kbd class="key-code">E</kbd>
          <span class="key-sound">Crash</span>
        </li>
        <li>
          <kbd class="key-code">R</kbd>
          <span class="key-sound">Ride</span>
        </li>
        <li>
          <kbd class="key-code">F</kbd>
          <span class="key-sound">Floor tom</span>
        </li>
        <li>
          <kbd class="key-code">G</kbd>
          <span class="key-sound">Mid tom</span>
        </li>
        <li>
          <kbd class="key-code">H</kbd>
          <span class="key-sound">High tom</span>
        </li>
        <li>
          <kbd class="key-code">V</kbd>
          <kbd class="key-code">B</kbd>
          <span class="key-sound">Kick</span>
        </li>
        <li>
          <kbd class="key-code">J</kbd>
          <span class="key-sound">Snare</span>
        </li>
        <li>
          <kbd class="key-code">I</kbd>
          <span class="key-sound">Hi-Hat Open</span>
        </li>
        <li>
          <kbd class="key-code">K</kbd>
          <span class="key-sound">Hi-Hat Closed</span>
        </li>
      </ul>
    </div>
    <h1 class="main-title">JavaScript Drum Kit</h1>
    <div class="drum-kit-wrapper">
      <img id="crash-ride" class="crash-cymbal" src="img/crash.png" alt="Crash cymbal">

      <img id="hihat-top" class="hihat-top-cymbal" src="img/hihat-top.png" alt="Hi Hat cymbal">

      <div data-key="74" class="key snare">
        <kbd>J</kbd>
      </div>
      <div data-key="66" class="key kick">
        <kbd>B</kbd>
      </div>
      <div data-key="86" class="key kick2">
        <kbd>V</kbd>
      </div>
      <div data-key="72" class="key tom-high">
        <kbd>H</kbd>
      </div>
      <div data-key="71" class="key tom-mid">
        <kbd>G</kbd>
      </div>
      <div data-key="70" class="key tom-low">
        <kbd>F</kbd>
      </div>
      <div data-key="69" class="key crash">
        <kbd>E</kbd>
      </div>
      <div data-key="82" class="key ride">
        <kbd>R</kbd>
      </div>
      <div data-key="73" class="key hihat-open">
        <kbd>I</kbd>
      </div>
      <div data-key="75" class="key hihat-close">
        <kbd>K</kbd>
      </div>
      <img class="drum-kit" src="img/drum-kit.png" alt="Drum Kit" />
    </div>
  </section>



	<audio data-key="74" src="sounds/snare.wav"></audio>
	<audio data-key="66" src="sounds/kick.wav"></audio>
	<audio data-key="86" src="sounds/kick.wav"></audio>
	<audio data-key="72" src="sounds/tom-high.wav"></audio>
	<audio data-key="71" src="sounds/tom-mid.wav"></audio>
	<audio data-key="70" src="sounds/tom-low.wav"></audio>
	<audio data-key="69" src="sounds/crash.wav"></audio>
	<audio data-key="82" src="sounds/ride.wav"></audio>
	<audio data-key="73" src="sounds/hihat-open.wav"></audio>
	<audio data-key="75" src="sounds/hihat-close.wav"></audio>

	<script type="text/javascript" src="script.js"></script>
</body>
</html>