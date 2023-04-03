const Ziggy = {"url":"http:\/\/localhost","port":null,"defaults":{},"routes":{"sanctum.csrf-cookie":{"uri":"sanctum\/csrf-cookie","methods":["GET","HEAD"]},"ignition.healthCheck":{"uri":"_ignition\/health-check","methods":["GET","HEAD"]},"ignition.executeSolution":{"uri":"_ignition\/execute-solution","methods":["POST"]},"ignition.updateConfig":{"uri":"_ignition\/update-config","methods":["POST"]},"login.post":{"uri":"api\/v1\/login","methods":["POST"]},"catalog.organizations.index":{"uri":"api\/v1\/organizations","methods":["GET","HEAD"]},"catalog.organizations.store":{"uri":"api\/v1\/organizations","methods":["POST"]},"catalog.organizations.update":{"uri":"api\/v1\/organizations\/{organization}","methods":["PATCH"],"bindings":{"organization":"id"}},"catalog.organizations.show":{"uri":"api\/v1\/organizations\/{organization}","methods":["GET","HEAD"],"bindings":{"organization":"id"}},"login":{"uri":"login","methods":["GET","HEAD"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
