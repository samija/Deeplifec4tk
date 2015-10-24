jsPlumb.ready(function () {

    var color = "#fbc210";

    var instance = jsPlumb.getInstance({
        // notice the 'curviness' argument to this Bezier curve.  the curves on this page are far smoother
        // than the curves on the first demo, which use the default curviness value.
        Connector: [ "Bezier", { curviness: 50 } ],
        DragOptions: { cursor: "pointer", zIndex: 2000 },
        PaintStyle: { strokeStyle: color, lineWidth: 2 },
        EndpointStyle: { radius: 9, fillStyle: color },
        HoverPaintStyle: {strokeStyle: "red" },
        EndpointHoverStyle: {fillStyle: "red" },
        Container: "canvas"
    });

    // suspend drawing and initialise.
    instance.batch(function () {
        // declare some common values:
        var arrowCommon = { foldback: 0.7, fillStyle: color, width: 14 },
        // use three-arg spec to create two different arrows with the common values:
            overlays = [
                [ "Arrow", { location: 0.7 }, arrowCommon ]
            ];

        // add endpoints, giving them a UUID.
        // you DO NOT NEED to use this method. You can use your library's selector method.
        // the jsPlumb demos use it so that the code can be shared between all three libraries.
        var windows = jsPlumb.getSelector(".chart-demo .window");
        for (var i = 0; i < windows.length; i++) {
            instance.addEndpoint(windows[i], {
                uuid: windows[i].getAttribute("id") + "-bottom",
                anchor: "Bottom",
                maxConnections: -1
            });
            instance.addEndpoint(windows[i], {
                uuid: windows[i].getAttribute("id") + "-top",
                anchor: "Top",
                maxConnections: -1
            });
        }

        //instance.connect({uuids: ["chartWindow3-bottom", "chartWindow6-top" ], overlays: overlays, detachable: true, reattach: true});
        instance.connect({uuids: ["chartWindow1-bottom", "chartWindow2-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow1-bottom", "chartWindow3-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow1-bottom", "chartWindow4-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow1-bottom", "chartWindow5-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow1-bottom", "chartWindow6-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow2-bottom", "chartWindow7-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow2-bottom", "chartWindow8-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow2-bottom", "chartWindow9-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow2-bottom", "chartWindow10-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow2-bottom", "chartWindow11-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow3-bottom", "chartWindow12-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow3-bottom", "chartWindow13-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow3-bottom", "chartWindow14-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow3-bottom", "chartWindow15-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow3-bottom", "chartWindow16-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow4-bottom", "chartWindow17-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow4-bottom", "chartWindow18-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow4-bottom", "chartWindow19-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow4-bottom", "chartWindow20-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow4-bottom", "chartWindow21-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow5-bottom", "chartWindow22-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow5-bottom", "chartWindow23-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow5-bottom", "chartWindow24-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow5-bottom", "chartWindow25-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow5-bottom", "chartWindow26-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow6-bottom", "chartWindow27-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow6-bottom", "chartWindow28-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow6-bottom", "chartWindow29-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow6-bottom", "chartWindow30-top" ], overlays: overlays});
        instance.connect({uuids: ["chartWindow6-bottom", "chartWindow31-top" ], overlays: overlays});

        instance.draggable(windows);

    });

    jsPlumb.fire("jsPlumbDemoLoaded", instance);
});