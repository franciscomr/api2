const Ziggy = {"url":"http:\/\/localhost","port":null,"defaults":{},"routes":{"sanctum.csrf-cookie":{"uri":"sanctum\/csrf-cookie","methods":["GET","HEAD"]},"ignition.healthCheck":{"uri":"_ignition\/health-check","methods":["GET","HEAD"]},"ignition.executeSolution":{"uri":"_ignition\/execute-solution","methods":["POST"]},"ignition.updateConfig":{"uri":"_ignition\/update-config","methods":["POST"]},"catalog.organizations.index":{"uri":"api\/organizations","methods":["GET","HEAD"]},"catalog.organizations.store":{"uri":"api\/organizations","methods":["POST"]},"catalog.organizations.update":{"uri":"api\/organizations\/{organization}","methods":["PATCH"],"bindings":{"organization":"id"}},"catalog.organizations.show":{"uri":"api\/organizations\/{organization}","methods":["GET","HEAD"],"bindings":{"organization":"id"}},"catalog.positions.index":{"uri":"api\/positions","methods":["GET","HEAD"]},"catalog.positions.store":{"uri":"api\/positions","methods":["POST"]},"catalog.positions.show":{"uri":"api\/positions\/{position}","methods":["GET","HEAD"],"bindings":{"position":"id"}},"home":{"uri":"home","methods":["GET","HEAD"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
