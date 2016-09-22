// Copyright 2007 Google, Inc.
// This sample code is under the Apache2 license, see
// http://www.apache.org/licenses/LICENSE-2.0 for license details.

/**
 * @fileoverview Wrapper for Mouseover Tracking
 */

/**
 * @class Mouseover Tracker.
 *     This class provides basic logic to track the first mouseover on
 *     a given object. It is motivated by the fact that many mouseovers
 *     may occur on an object, and the first provides the most useful data
 *     whereas others may simply incur wasteful additional calls.
 *
 * @param {Object} tracker The GA tracker to use for mouseover tracking.
 * @param {String} opt_obj_name Optional object name for the event tracker,
 *     overriding the default which is "MouseoverTracker".
 * @constructor
 */
var MouseoverTracker = function(tracker, opt_obj_name) {
  if (typeof tracker == "undefined") {
    throw new Error("Mouseover tracker constructor requires GA tracker object.");
  }
  this.tracker_ = tracker;
  this.tracked_ = false;
  this.outtracked_ = false;
  if (opt_obj_name != undefined) {
    this.obj_name_ = opt_obj_name;
  } else {
    this.obj_name_ = 'MouseoverTracker';
  }
};

MouseoverTracker.prototype._trackMouseover = function(cell_id) {
  if (!this.tracked_) {
    /*eventTracker = this.tracker_._createEventTracker(this.obj_name_);
    eventTracker._trackEvent('Mouseover');*/
	//_gaq.push(['_trackEvent', 'case-study-matrix', 'mouseover', this.obj_name_]);
        ga('send', 'event', 'case-study-matrix', 'mouseover', this.obj_name_);
	//eval("timeTracker" + cell_id + "._recordStartTime();");
    this.tracked_ = true;
  }
};

/**
 * Tracks the mouseover if it has not been tracked before.
 */
MouseoverTracker.prototype._trackMouseout = function(cell_id) {
  if (!this.outtracked_) {
	//eval("timeTracker" + cell_id + "._recordEndTime();");
	//eval("timeTracker" + cell_id + "._setHistogramBuckets([10, 20, 50, 100, 500, 1000]);");
	//eval("timeTracker" + cell_id + "._track(pageTracker, 'case-study-matrix', this.obj_name_);");
    this.outtracked_ = true;
  }
};