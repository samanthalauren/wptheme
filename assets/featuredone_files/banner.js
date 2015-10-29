

var cta_arrow = document.getElementById('cta_arrow');
var arrow_yoyo=false;

// Add Event Listener
function addEvent(obj, evt, fn) {if(obj.addEventListener) {obj.addEventListener(evt, fn, false);}else if(obj.attachEvent) {obj.attachEvent('on' + evt, fn)}}



function phase1(){
	
	TweenLite.ticker.fps(60);
	
	TweenLite.to ('#product', 7, {x:'125px', ease:Sine.easeInOut });
	TweenLite.to('#txt1', .8, {autoAlpha:1, delay:0, ease: Linear.easeNone});	
	TweenLite.delayedCall(2.5, phase2 );
}



function phase2(){
	TweenLite.to('#txt1', .3, {autoAlpha:0, ease: Linear.easeNone});
	TweenLite.to('#txt2', .8, {autoAlpha:1, delay:.5, ease: Linear.easeNone});
	TweenLite.delayedCall(3, phase3 );
	
}


function phase3(){
	
	//fade out last Title
	TweenLite.to('#txt2', .3, {autoAlpha:0, ease: Linear.easeNone});
	
	//reveal div layer: endFrame
	TweenLite.set('#endFrame', {opacity:1});
	var dur=1;	
	
	TweenLite.to('#txt3', dur, {autoAlpha:1, ease: Linear.easeNone, delay: .5 });
	TweenLite.to('#divider', dur, {autoAlpha:1, ease: Linear.easeNone, delay: .8 });
	TweenLite.to('#txt4', dur, {autoAlpha:1, ease: Linear.easeNone, delay: 1 });
	TweenLite.to('#cta', dur, {autoAlpha:1, ease: Linear.easeNone, delay: 1.3, onComplete:addCTAListeners });
	TweenLite.to('#cta_text', dur, {autoAlpha:1, ease: Linear.easeNone, delay: 1.3});
	TweenLite.to('#logo', dur, {autoAlpha:1, ease: Linear.easeNone, delay: 1.6 });
}


function onCTARollover(){
	TweenLite.killTweensOf(cta_arrow);
	arrow_yoyo=true;
	TweenLite.to(cta_arrow, .3, {left:'2px', onComplete: arrow_yoyo_back});
}

function arrow_yoyo_back(){
	
	if ( !arrow_yoyo )return; //do nothing;
	//console.log ( 'cta_arrow left ' + cta_arrow.style.left );
	if ( cta_arrow.style.left === 0 || cta_arrow.style.left === '0px' ) {
		TweenLite.to(cta_arrow, .3, {left:'2px', onComplete: arrow_yoyo_back});
	} else {
		TweenLite.to(cta_arrow, .3, {left:'0px', onComplete: arrow_yoyo_back});
	}
}

function onCTARollout(){
	arrow_yoyo=false;
	TweenLite.killTweensOf(cta_arrow);
	TweenLite.to(cta_arrow, .3, {left:'0px'});
}

function addCTAListeners(){
	
	//console.log('addCTAListeners');
	
	var clickLayer = document.getElementById('hitarea');
	addEvent(clickLayer, 'mouseover', onCTARollover);
	addEvent(clickLayer, 'mouseout', onCTARollout);
	//clickLayer.addEventListener("mouseover", onCTARollover );
	//clickLayer.addEventListener("mouseout", onCTARollout );	
}



















var CustomEase = (function(){
    var easings = {};

    function create(name, points){
        var sections = points.length,
            sectionStep = 1 / sections,
            curves = [],
            i;

        for(i = 0; i < sections; i++){
            curves.push((function(p){
                return function(t){
                    return Math.pow(1 - t, 2) * p.s + 2 * t * (1 - t) * p.cp + Math.pow(t, 2) * p.e;
                }
            })(points[i]));
        }

        easings[name] = function(t){
            var curveIndex = Math.floor(t / sectionStep),
                curveProgress = t % sectionStep / sectionStep;

            return curves[curveIndex](curveProgress);
        };

        easings[name].getRatio = function(t){
            return easings[name](t);
        };
    }

    function byName(name){
        return easings[name];
    }

    return {
        create: create,
        byName: byName
    };
})();