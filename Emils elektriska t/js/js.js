! function() {
    "use strict";
    /*! @source http://purl.eligrey.com/github/classList.js/blob/master/classList.js */
    "document" in window.self && ((!("classList" in document.createElement("_")) || document.createElementNS && !("classList" in document.createElementNS("http://www.w3.org/2000/svg", "g"))) && function(e) {
        if ("Element" in e) {
            var a = e.Element.prototype,
                r = Object,
                t = String.prototype.trim || function() { return this.replace(/^\s+|\s+$/g, "") },
                s = Array.prototype.indexOf || function(e) {
                    for (var a = 0, r = this.length; a < r; a++)
                        if (a in this && this[a] === e) return a;
                    return -1
                },
                o = function(e, a) { this.name = e, this.code = DOMException[e], this.message = a },
                n = function(e, a) { if ("" === a) throw new o("SYNTAX_ERR", "An invalid or illegal string was specified"); if (/\s/.test(a)) throw new o("INVALID_CHARACTER_ERR", "String contains an invalid character"); return s.call(e, a) },
                i = function(e) {
                    for (var a = t.call(e.getAttribute("class") || ""), r = a ? a.split(/\s+/) : [], s = 0, o = r.length; s < o; s++) this.push(r[s]);
                    this._updateClassName = function() { e.setAttribute("class", this.toString()) }
                },
                h = i.prototype = [],
                l = function() { return new i(this) };
            if (o.prototype = Error.prototype, h.item = function(e) { return this[e] || null }, h.contains = function(e) { return -1 !== n(this, e += "") }, h.add = function() {
                    var e, a = arguments,
                        r = 0,
                        t = a.length,
                        s = !1;
                    do { e = a[r] + "", -1 === n(this, e) && (this.push(e), s = !0) } while (++r < t);
                    s && this._updateClassName()
                }, h.remove = function() {
                    var e, a, r = arguments,
                        t = 0,
                        s = r.length,
                        o = !1;
                    do { for (e = r[t] + "", a = n(this, e); - 1 !== a;) this.splice(a, 1), o = !0, a = n(this, e) } while (++t < s);
                    o && this._updateClassName()
                }, h.toggle = function(e, a) {
                    e += "";
                    var r = this.contains(e),
                        t = r ? !0 !== a && "remove" : !1 !== a && "add";
                    return t && this[t](e), !0 === a || !1 === a ? a : !r
                }, h.toString = function() { return this.join(" ") }, r.defineProperty) { var c = { get: l, enumerable: !0, configurable: !0 }; try { r.defineProperty(a, "classList", c) } catch (e) { void 0 !== e.number && -2146823252 !== e.number || (c.enumerable = !1, r.defineProperty(a, "classList", c)) } } else r.prototype.__defineGetter__ && a.__defineGetter__("classList", l)
        }
    }(window.self), function() {
        var e = document.createElement("_");
        if (e.classList.add("c1", "c2"), !e.classList.contains("c2")) {
            var a = function(e) {
                var a = DOMTokenList.prototype[e];
                DOMTokenList.prototype[e] = function(e) { var r, t = arguments.length; for (r = 0; r < t; r++) e = arguments[r], a.call(this, e) }
            };
            a("add"), a("remove")
        }
        if (e.classList.toggle("c3", !1), e.classList.contains("c3")) {
            var r = DOMTokenList.prototype.toggle;
            DOMTokenList.prototype.toggle = function(e, a) { return 1 in arguments && !this.contains(e) == !a ? a : r.call(this, e) }
        }
        e = null
    }()), Array.prototype.fill || Object.defineProperty(Array.prototype, "fill", { value: function(e) { if (null == this) throw new TypeError("this is null or not defined"); for (var a = Object(this), r = a.length >>> 0, t = arguments[1], s = t >> 0, o = s < 0 ? Math.max(r + s, 0) : Math.min(s, r), n = arguments[2], i = void 0 === n ? r : n >> 0, h = i < 0 ? Math.max(r + i, 0) : Math.min(i, r); o < h;) a[o] = e, o++; return a } }), Array.prototype.find || Object.defineProperty(Array.prototype, "find", {
        value: function(e) {
            if (null == this) throw new TypeError('"this" is null or not defined');
            var a = Object(this),
                r = a.length >>> 0;
            if ("function" != typeof e) throw new TypeError("predicate must be a function");
            for (var t = arguments[1], s = 0; s < r;) {
                var o = a[s];
                if (e.call(t, o, s, a)) return o;
                s++
            }
        }
    }), Array.prototype.findIndex || Object.defineProperty(Array.prototype, "findIndex", {
        value: function(e) {
            if (null == this) throw new TypeError('"this" is null or not defined');
            var a = Object(this),
                r = a.length >>> 0;
            if ("function" != typeof e) throw new TypeError("predicate must be a function");
            for (var t = arguments[1], s = 0; s < r;) {
                var o = a[s];
                if (e.call(t, o, s, a)) return s;
                s++
            }
            return -1
        },
        configurable: !0,
        writable: !0
    }), void 0 === Array.from && (Array.from = function(e) { return Array.prototype.slice.call(e) }), Array.prototype.includes || Object.defineProperty(Array.prototype, "includes", {
        value: function(e, a) {
            if (null == this) throw new TypeError('"this" is null or not defined');
            var r = Object(this),
                t = r.length >>> 0;
            if (0 === t) return !1;
            var s, o, n = 0 | a,
                i = Math.max(n >= 0 ? n : t - Math.abs(n), 0);
            for (; i < t;) {
                if ((s = r[i]) === (o = e) || "number" == typeof s && "number" == typeof o && isNaN(s) && isNaN(o)) return !0;
                i++
            }
            return !1
        }
    }), Array.prototype.some || (Array.prototype.some = function(e, a) {
        if (null == this) throw new TypeError("Array.prototype.some called on null or undefined");
        if ("function" != typeof e) throw new TypeError;
        for (var r = Object(this), t = r.length >>> 0, s = 0; s < t; s++)
            if (s in r && e.call(a, r[s], s, r)) return !0;
        return !1
    });
    var e = window,
        a = e,
        r = e.document,
        t = new Promise((function(e) { "loading" === r.readyState ? r.addEventListener("DOMContentLoaded", (function() { return e() })) : e() }));
    if ("function" != typeof CustomEvent && (a.CustomEvent = function(e, a) { a = a || { bubbles: !1, cancelable: !1, detail: void 0 }; var r = document.createEvent("CustomEvent"); return r.initCustomEvent(e, a.bubbles, a.cancelable, a.detail), r }, a.CustomEvent.prototype = Event.prototype), !Element.prototype.matches) {
        var s = Element.prototype;
        Element.prototype.matches = s.msMatchesSelector || s.webkitMatchesSelector
    }
    /*! *****************************************************************************
    	Copyright (c) Microsoft Corporation. All rights reserved.
    	Licensed under the Apache License, Version 2.0 (the "License"); you may not use
    	this file except in compliance with the License. You may obtain a copy of the
    	License at http://www.apache.org/licenses/LICENSE-2.0

    	THIS CODE IS PROVIDED ON AN *AS IS* BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
    	KIND, EITHER EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED
    	WARRANTIES OR CONDITIONS OF TITLE, FITNESS FOR A PARTICULAR PURPOSE,
    	MERCHANTABLITY OR NON-INFRINGEMENT.

    	See the Apache Version 2.0 License for specific language governing permissions
    	and limitations under the License.
    	***************************************************************************** */
    function o(e, a, r, t) {
        return new(r || (r = Promise))((function(s, o) {
            function n(e) { try { h(t.next(e)) } catch (e) { o(e) } }

            function i(e) { try { h(t.throw(e)) } catch (e) { o(e) } }

            function h(e) {
                var a;
                e.done ? s(e.value) : (a = e.value, a instanceof r ? a : new r((function(e) { e(a) }))).then(n, i)
            }
            h((t = t.apply(e, a || [])).next())
        }))
    }

    function n(e, a) {
        var r, t, s, o, n = { label: 0, sent: function() { if (1 & s[0]) throw s[1]; return s[1] }, trys: [], ops: [] };
        return o = { next: i(0), throw: i(1), return: i(2) }, "function" == typeof Symbol && (o[Symbol.iterator] = function() { return this }), o;

        function i(o) {
            return function(i) {
                return function(o) {
                    if (r) throw new TypeError("Generator is already executing.");
                    for (; n;) try {
                        if (r = 1, t && (s = 2 & o[0] ? t.return : o[0] ? t.throw || ((s = t.return) && s.call(t), 0) : t.next) && !(s = s.call(t, o[1])).done) return s;
                        switch (t = 0, s && (o = [2 & o[0], s.value]), o[0]) {
                            case 0:
                            case 1:
                                s = o;
                                break;
                            case 4:
                                return n.label++, { value: o[1], done: !1 };
                            case 5:
                                n.label++, t = o[1], o = [0];
                                continue;
                            case 7:
                                o = n.ops.pop(), n.trys.pop();
                                continue;
                            default:
                                if (!(s = n.trys, (s = s.length > 0 && s[s.length - 1]) || 6 !== o[0] && 2 !== o[0])) { n = 0; continue }
                                if (3 === o[0] && (!s || o[1] > s[0] && o[1] < s[3])) { n.label = o[1]; break }
                                if (6 === o[0] && n.label < s[1]) { n.label = s[1], s = o; break }
                                if (s && n.label < s[2]) { n.label = s[2], n.ops.push(o); break }
                                s[2] && n.ops.pop(), n.trys.pop();
                                continue
                        }
                        o = a.call(e, n)
                    } catch (e) { o = [6, e], t = 0 } finally { r = s = 0 }
                    if (5 & o[0]) throw o[1];
                    return { value: o[0] ? o[1] : void 0, done: !0 }
                }([o, i])
            }
        }
    }
    Element.prototype.closest && null !== document.createElement("a").closest("a") || (Element.prototype.closest = function(e) {
            var a = this;
            do {
                if (a.matches(e)) return a;
                a = a.parentElement
            } while (null !== a);
            return null
        }), [Element.prototype, CharacterData.prototype, DocumentType.prototype].forEach((function(e) { e.hasOwnProperty("remove") || Object.defineProperty(e, "remove", { configurable: !0, enumerable: !0, writable: !0, value: function() { null !== this.parentNode && this.parentNode.removeChild(this) } }) })),
        function() {
            o(this, void 0, void 0, (function() {
                return n(this, (function(e) {
                    switch (e.label) {
                        case 0:
                            return [4, t];
                        case 1:
                            return e.sent(),
                                function() {
                                    var e = document.createElement("div");
                                    e.style.cssText = "position:fixed;width:1px;line-height:16px;word-wrap:normal;word-break:normal;white-space:normal;border: 1px solid red;top:-1000px", e.innerHTML = "x<wbr>x", document.body.appendChild(e);
                                    var a = e.clientHeight > 16;
                                    return document.body.removeChild(e), a
                                }() || ((a = document.createElement("style")).textContent = 'wbr::after { content: "​"}', document.head.appendChild(a)), [2]
                    }
                    var a
                }))
            }))
        }(), location.origin || (location.origin = location.protocol + "//" + location.hostname), "undefined" != typeof window && window.NodeList && !NodeList.prototype.forEach && (NodeList.prototype.forEach = function(e, a) { a = a || window; for (var r = 0; r < this.length; r++) e.call(a, this[r], r, this) }), "function" != typeof Object.assign && Object.defineProperty(Object, "assign", {
            value: Object.assign || function(e) {
                for (var a = void 0, r = 1, t = arguments.length; r < t; r++)
                    for (var s in a = arguments[r]) Object.prototype.hasOwnProperty.call(a, s) && (e[s] = a[s]);
                return e
            }
        }), String.prototype.endsWith || (String.prototype.endsWith = function(e, a) { return (void 0 === a || a > this.length) && (a = this.length), this.substring(a - e.length, a) === e }), String.prototype.includes || Object.defineProperty(String.prototype, "includes", { value: function(e, a) { if (e instanceof RegExp) throw new TypeError("first argument must not be a RegExp"); return void 0 === a && (a = 0), -1 !== this.indexOf(e, a) } }), String.prototype.startsWith || Object.defineProperty(String.prototype, "startsWith", { value: function(e, a) { var r = a > 0 ? 0 | a : 0; return this.substring(r, r + e.length) === e } }), "undefined" == typeof Symbol && (window.Symbol = { iterator: "not implemented Symbol.iterator" });
    const i = { light: { text: "hsla(0, 0%, 9%, 1)", "text-subtle": "hsla(0, 0%, 37%, 1)", "text-invert": "hsla(0, 0%, 100%, 1)", "text-glow-high-contrast": "hsla(0, 0%, 9%, 0.999)", "box-shadow-light": "hsla(0, 0%, 0%, 0.108)", "box-shadow-medium": "hsla(0, 0%, 0%, 0.132)", "box-shadow-heavy": "hsla(0, 0%, 0%, 0.18)", "box-shadow-extra-heavy": "hsla(0, 0%, 0%, 0.22)", overlay: "hsla(0, 0%, 0%, 0.7)", "overlay-invert": "hsla(0, 0%, 100%, 0.999)", "body-background": "hsla(0, 0%, 100%, 0.998)", "body-background-medium": "hsla(0, 0%, 98%, 1)", "body-background-dark": "hsla(0, 0%, 95%, 1)", border: "hsla(0, 0%, 89%, 1)", "hover-base": "hsla(0, 0%, 18%, 1)", "hover-invert": "hsla(0, 0%, 98%, 0.999)", "border-white-high-contrast": "hsla(0, 0%, 100%, 0)", "border-yellow-high-contrast": "hsla(0, 0%, 0%, 0)", "code-highlight-background": "hsla(44, 100%, 90%, 1)", visited: "hsla(280, 100%, 30%, 1)", "score-low-off": "hsla(16, 99%, 43%, 0.3)", "score-low": "hsla(16, 99%, 43%, 1)", "score-medium-off": "hsla(44, 100%, 50%, 0.3)", "score-medium": "hsla(44, 100%, 50%, 1)", "score-high-off": "hsla(120, 77%, 30%, 0.3)", "score-high": "hsla(120, 77%, 30%, 1)", "primary-base": "hsla(206, 100%, 35%, 1)", "primary-background": "hsla(205, 100%, 94%, 1)", "primary-background-glow-high-contrast": "hsla(205, 100%, 94%, 0.999)", "primary-dark": "hsla(206, 100%, 15%, 1)", "primary-hover": "hsla(206, 100%, 28%, 1)", "primary-active": "hsla(206, 100%, 20%, 1)", "primary-box-shadow": "hsla(206, 100%, 35%, 0.3)", "primary-invert": "hsla(0, 0%, 100%, 0.997)", "secondary-base": "hsla(0, 0%, 67%, 1)", "secondary-background": "hsla(0, 0%, 89%, 0.999)", "secondary-background-glow-high-contrast": "hsla(0, 0%, 89%, 0.998)", "secondary-dark": "hsla(0, 0%, 18%, 0.999)", "secondary-hover": "hsla(0, 0%, 78%, 1)", "secondary-active": "hsla(0, 0%, 78%, 0.999)", "secondary-box-shadow": "hsla(0, 0%, 0%, 0.3)", "secondary-invert": "hsla(0, 0%, 0%, 1)", "tertiary-base": "hsla(0, 0%, 27%, 1)", "tertiary-background": "hsla(0, 0%, 9%, 0.998)", "tertiary-background-glow-high-contrast": "hsla(0, 0%, 9%, 0.997)", "tertiary-dark": "hsla(0, 0%, 89%, 0.997)", "tertiary-hover": "hsla(0, 0%, 37%, 0.999)", "tertiary-active": "hsla(0, 0%, 46%, 1)", "tertiary-box-shadow": "hsla(206, 100%, 35%, 0.299)", "tertiary-invert": "hsla(0, 0%, 100%, 0.996)", "success-base": "hsla(120, 77%, 30%, 0.999)", "success-background": "hsla(120, 77%, 90%, 1)", "success-background-glow-high-contrast": "hsla(120, 77%, 90%, 0.999)", "success-dark": "hsla(120, 77%, 15%, 1)", "success-hover": "hsla(120, 77%, 25%, 1)", "success-active": "hsla(120, 77%, 20%, 1)", "success-box-shadow": "hsla(120, 77%, 30%, 0.299)", "success-invert": "hsla(0, 0%, 100%, 0.995)", "info-base": "hsla(262, 46%, 58%, 1)", "info-background": "hsla(262, 46%, 90%, 1)", "info-background-glow-high-contrast": "hsla(262, 46%, 90%, 0.999)", "info-dark": "hsla(262, 46%, 25%, 1)", "info-hover": "hsla(262, 46%, 50%, 1)", "info-active": "hsla(262, 46%, 37%, 1)", "info-box-shadow": "hsla(262, 46%, 90%, 0.998)", "info-invert": "hsla(0, 0%, 100%, 0.994)", "warning-base": "hsla(44, 100%, 50%, 0.999)", "warning-background": "hsla(44, 100%, 90%, 0.999)", "warning-background-glow-high-contrast": "hsla(44, 100%, 90%, 0.998)", "warning-dark": "hsla(44, 100%, 20%, 1)", "warning-hover": "hsla(44, 100%, 40%, 1)", "warning-active": "hsla(44, 100%, 30%, 1)", "warning-box-shadow": "hsla(44, 100%, 50%, 0.299)", "warning-invert": "hsla(0, 0%, 0%, 0.999)", "danger-base": "hsla(16, 99%, 43%, 0.999)", "danger-background": "hsla(16, 99%, 90%, 1)", "danger-background-glow-high-contrast": "hsla(16, 99%, 90%, 0.999)", "danger-dark": "hsla(16, 99%, 20%, 1)", "danger-hover": "hsla(16, 99%, 35%, 1)", "danger-active": "hsla(16, 99%, 25%, 1)", "danger-box-shadow": "hsla(16, 99%, 43%, 0.299)", "danger-invert": "hsla(0, 0%, 100%, 0.993)" }, dark: { text: "hsla(0, 0%, 89%, 1)", "text-subtle": "hsla(0, 0%, 78%, 1)", "text-invert": "hsla(0, 0%, 18%, 1)", "text-glow-high-contrast": "hsla(0, 0%, 89%, 0.999)", "box-shadow-light": "hsla(0, 0%, 100%, 0.108)", "box-shadow-medium": "hsla(0, 0%, 100%, 0.132)", "box-shadow-heavy": "hsla(0, 0%, 100%, 0.18)", "box-shadow-extra-heavy": "hsla(0, 0%, 100%, 0.22)", overlay: "hsla(0, 0%, 0%, 0.7)", "overlay-invert": "hsla(0, 0%, 100%, 1)", "body-background": "hsla(0, 0%, 9%, 1)", "body-background-medium": "hsla(0, 0%, 18%, 0.999)", "body-background-dark": "hsla(0, 0%, 14%, 1)", border: "hsla(0, 0%, 27%, 1)", "hover-base": "hsla(0, 0%, 78%, 0.999)", "hover-invert": "hsla(0, 0%, 18%, 0.998)", "border-white-high-contrast": "hsla(0, 0%, 100%, 0)", "border-yellow-high-contrast": "hsla(0, 0%, 0%, 0)", "code-highlight-background": "hsla(120, 77%, 20%, 1)", visited: "hsla(246, 61%, 69%, 1)", "score-low-off": "hsla(16, 99%, 43%, 0.7)", "score-low": "hsla(16, 99%, 43%, 1)", "score-medium-off": "hsla(44, 100%, 50%, 0.3)", "score-medium": "hsla(44, 100%, 60%, 1)", "score-high-off": "hsla(120, 77%, 30%, 0.7)", "score-high": "hsla(120, 77%, 40%, 1)", "primary-base": "hsla(206, 100%, 65%, 1)", "primary-background": "hsla(206, 100%, 15%, 1)", "primary-background-glow-high-contrast": "hsla(206, 100%, 15%, 0.999)", "primary-dark": "hsla(206, 100%, 82%, 1)", "primary-hover": "hsla(206, 100%, 50%, 1)", "primary-active": "hsla(206, 100%, 35%, 1)", "primary-box-shadow": "hsla(206, 100%, 35%, 0.3)", "primary-invert": "hsla(0, 0%, 0%, 1)", "secondary-base": "hsla(0, 0%, 46%, 1)", "secondary-background": "hsla(0, 0%, 18%, 0.997)", "secondary-background-glow-high-contrast": "hsla(0, 0%, 18%, 0.996)", "secondary-dark": "hsla(0, 0%, 89%, 0.998)", "secondary-hover": "hsla(0, 0%, 57%, 1)", "secondary-active": "hsla(0, 0%, 67%, 1)", "secondary-box-shadow": "hsla(0, 0%, 0%, 0.699)", "secondary-invert": "hsla(0, 0%, 100%, 0.999)", "tertiary-base": "hsla(0, 0%, 27%, 0.999)", "tertiary-background": "hsla(0, 0%, 9%, 0.999)", "tertiary-background-glow-high-contrast": "hsla(0, 0%, 9%, 0.998)", "tertiary-dark": "hsla(0, 0%, 89%, 0.997)", "tertiary-hover": "hsla(0, 0%, 37%, 1)", "tertiary-active": "hsla(0, 0%, 46%, 0.999)", "tertiary-box-shadow": "hsla(206, 100%, 35%, 0.299)", "tertiary-invert": "hsla(0, 0%, 100%, 0.998)", "success-base": "hsla(120, 77%, 30%, 1)", "success-background": "hsla(120, 77%, 15%, 1)", "success-background-glow-high-contrast": "hsla(120, 77%, 15%, 0.999)", "success-dark": "hsla(120, 77%, 90%, 1)", "success-hover": "hsla(120, 77%, 40%, 0.999)", "success-active": "hsla(120, 77%, 60%, 1)", "success-box-shadow": "hsla(120, 77%, 30%, 0.699)", "success-invert": "hsla(0, 0%, 0%, 0.999)", "info-base": "hsla(262, 46%, 58%, 1)", "info-background": "hsla(262, 46%, 25%, 1)", "info-background-glow-high-contrast": "hsla(262, 46%, 25%, 0.999)", "info-dark": "hsla(262, 46%, 90%, 1)", "info-hover": "hsla(262, 46%, 65%, 1)", "info-active": "hsla(262, 46%, 70%, 1)", "info-box-shadow": "hsla(262, 46%, 17%, 0.7)", "info-invert": "hsla(0, 0%, 100%, 0.997)", "warning-base": "hsla(44, 100%, 50%, 1)", "warning-background": "hsla(44, 100%, 20%, 1)", "warning-background-glow-high-contrast": "hsla(44, 100%, 20%, 0.999)", "warning-dark": "hsla(44, 100%, 90%, 1)", "warning-hover": "hsla(44, 100%, 60%, 0.999)", "warning-active": "hsla(44, 100%, 70%, 1)", "warning-box-shadow": "hsla(44, 100%, 50%, 0.7)", "warning-invert": "hsla(0, 0%, 0%, 0.998)", "danger-base": "hsla(16, 99%, 43%, 0.999)", "danger-background": "hsla(16, 99%, 20%, 1)", "danger-background-glow-high-contrast": "hsla(16, 99%, 20%, 0.999)", "danger-dark": "hsla(16, 99%, 90%, 1)", "danger-hover": "hsla(16, 99%, 55%, 1)", "danger-active": "hsla(16, 99%, 70%, 1)", "danger-box-shadow": "hsla(16, 99%, 43%, 0.699)", "danger-invert": "hsla(0, 0%, 100%, 0.996)" }, "high-contrast": { text: "hsla(0, 0%, 100%, 1)", "text-subtle": "hsla(0, 0%, 100%, 0.999)", "text-invert": "hsla(0, 0%, 0%, 1)", "text-glow-high-contrast": "hsla(60, 100%, 50%, 1)", "box-shadow-light": "hsla(0, 0%, 100%, 0)", "box-shadow-medium": "hsla(0, 0%, 100%, 0.001)", "box-shadow-heavy": "hsla(0, 0%, 100%, 0.002)", "box-shadow-extra-heavy": "hsla(0, 0%, 100%, 0.003)", overlay: "hsla(0, 0%, 27%, 1)", "overlay-invert": "hsla(0, 0%, 100%, 0.998)", "body-background": "hsla(0, 0%, 0%, 0.999)", "body-background-medium": "hsla(0, 0%, 0%, 0.998)", "body-background-dark": "hsla(0, 0%, 0%, 0.997)", border: "hsla(0, 0%, 100%, 0.997)", "hover-base": "hsla(60, 100%, 50%, 0.999)", "hover-invert": "hsla(0, 0%, 0%, 0.996)", "border-white-high-contrast": "hsla(0, 0%, 100%, 0.996)", "border-yellow-high-contrast": "hsla(60, 100%, 50%, 0.998)", "code-highlight-background": "hsla(120, 77%, 20%, 1)", visited: "hsla(106, 100%, 50%, 1)", "score-low-off": "hsla(16, 99%, 35%, 1)", "score-low": "hsla(16, 99%, 90%, 1)", "score-medium-off": "hsla(44, 100%, 50%, 0.7)", "score-medium": "hsla(44, 100%, 80%, 1)", "score-high-off": "hsla(120, 77%, 25%, 1)", "score-high": "hsla(120, 77%, 90%, 1)", "primary-base": "hsla(60, 100%, 50%, 0.997)", "primary-background": "hsla(0, 0%, 0%, 0.995)", "primary-background-glow-high-contrast": "hsla(60, 100%, 50%, 0.996)", "primary-dark": "hsla(60, 100%, 50%, 0.995)", "primary-hover": "hsla(60, 100%, 60%, 1)", "primary-active": "hsla(60, 100%, 60%, 0.999)", "primary-box-shadow": "hsla(0, 0%, 100%, 0.995)", "primary-invert": "hsla(0, 0%, 0%, 0.994)", "secondary-base": "hsla(0, 0%, 89%, 1)", "secondary-background": "hsla(0, 0%, 0%, 0.993)", "secondary-background-glow-high-contrast": "hsla(0, 0%, 37%, 1)", "secondary-dark": "hsla(0, 0%, 89%, 0.999)", "secondary-hover": "hsla(0, 0%, 78%, 1)", "secondary-active": "hsla(0, 0%, 78%, 0.999)", "secondary-box-shadow": "hsla(0, 0%, 89%, 0.998)", "secondary-invert": "hsla(0, 0%, 0%, 0.992)", "tertiary-base": "hsla(0, 0%, 100%, 0.994)", "tertiary-background": "hsla(0, 0%, 0%, 0.991)", "tertiary-background-glow-high-contrast": "hsla(0, 0%, 100%, 0.993)", "tertiary-dark": "hsla(0, 0%, 100%, 0.992)", "tertiary-hover": "hsla(0, 0%, 89%, 0.997)", "tertiary-active": "hsla(0, 0%, 89%, 0.996)", "tertiary-box-shadow": "hsla(0, 0%, 100%, 0.991)", "tertiary-invert": "hsla(0, 0%, 0%, 0.99)", "success-base": "hsla(120, 77%, 80%, 1)", "success-background": "hsla(0, 0%, 0%, 0.989)", "success-background-glow-high-contrast": "hsla(120, 77%, 80%, 0.999)", "success-dark": "hsla(120, 77%, 90%, 0.999)", "success-hover": "hsla(120, 77%, 90%, 0.998)", "success-active": "hsla(120, 77%, 90%, 0.997)", "success-box-shadow": "hsla(0, 0%, 100%, 0.99)", "success-invert": "hsla(0, 0%, 0%, 0.988)", "info-base": "hsla(262, 46%, 80%, 1)", "info-background": "hsla(0, 0%, 0%, 0.987)", "info-background-glow-high-contrast": "hsla(262, 46%, 80%, 0.999)", "info-dark": "hsla(262, 46%, 90%, 1)", "info-hover": "hsla(262, 46%, 90%, 0.999)", "info-active": "hsla(262, 46%, 90%, 0.998)", "info-box-shadow": "hsla(0, 0%, 100%, 0.989)", "info-invert": "hsla(0, 0%, 0%, 0.986)", "warning-base": "hsla(44, 100%, 80%, 0.999)", "warning-background": "hsla(0, 0%, 0%, 0.985)", "warning-background-glow-high-contrast": "hsla(44, 100%, 80%, 0.998)", "warning-dark": "hsla(44, 100%, 90%, 1)", "warning-hover": "hsla(262, 46%, 90%, 0.997)", "warning-active": "hsla(262, 46%, 90%, 0.996)", "warning-box-shadow": "hsla(0, 0%, 100%, 0.988)", "warning-invert": "hsla(0, 0%, 0%, 0.984)", "danger-base": "hsla(16, 99%, 80%, 1)", "danger-background": "hsla(0, 0%, 0%, 0.983)", "danger-background-glow-high-contrast": "hsla(16, 99%, 80%, 0.999)", "danger-dark": "hsla(16, 99%, 90%, 0.999)", "danger-hover": "hsla(16, 99%, 90%, 0.998)", "danger-active": "hsla(16, 99%, 90%, 0.997)", "danger-box-shadow": "hsla(0, 0%, 100%, 0.987)", "danger-invert": "hsla(0, 0%, 0%, 0.982)" } };
    var h = /hsla\(\s*(\d+)\s*,\s*(\d+)%?\s*,\s*(\d+)%?\s*,\s*0?(\.?\d+)\s*\)/,
        l = new RegExp(h.source, "g");
    if (!("CSS" in window && CSS.supports && CSS.supports("--test", "red"))) {
        document.documentElement.dataset.cssVariableSupport = "false";
        var c = Array.from(document.styleSheets).filter((function(e) { return e instanceof CSSStyleSheet && null !== e.href && 0 === e.href.indexOf(location.origin) })).map((function(e) { return e })),
            d = function(e) {
                for (var a = { light: {}, dark: {}, "high-contrast": {} }, r = 0, t = ["light", "dark", "high-contrast"]; r < t.length; r++)
                    for (var s = t[r], o = 0, n = Object.keys(e[s]); o < n.length; o++) {
                        var i = n[o],
                            l = e[s][i].match(h),
                            c = l[1],
                            d = l[2],
                            u = l[3],
                            g = l[4];
                        a[s]["hsla(" + c + ", " + d + "%, " + u + "%, " + g + ")"] = i
                    }
                return a
            }(i);
        addEventListener("theme-changed", (function(e) {
            var a = e.detail;
            ! function(e, a, r, t) {
                for (var s = {}, o = 0, n = e; o < n.length; o++)
                    for (var h = n[o], c = function(e) {
                            var o = h.cssRules.item(e);
                            if (o.type !== CSSRule.STYLE_RULE) return "continue";
                            var n = o.style.cssText.replace(l, (function(e, n, h, l, c) {
                                for (var d = "hsla(" + n + ", " + h + "%, " + l + "%, " + c + ")", u = a[t][d] || s[d], g = -1; !u && g < 2;) {
                                    for (var f = -1; !u && f < 2;) {
                                        var y = "hsla(" + (+n + g) + ", " + (+h + f) + "%, " + l + "%, " + c + ")";
                                        (u = a[t][y]) && (s[d] = u), f++
                                    }
                                    g++
                                }
                                return u ? i[r][u] : (console.log("Couldn't find " + t + " name for " + d + ".\n" + o.selectorText + "\n" + o.cssText), d)
                            }));
                            if (n === o.style.cssText) return "continue";
                            o.style.cssText = n
                        }, d = 0; d < h.cssRules.length; d++) c(d)
            }(c, d, a.currentTheme, a.previousTheme)
        }))
    }
}();
//# sourceMappingURL=49757a8e.index-polyfills.js.map