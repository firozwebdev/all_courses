export function index() {
  let mt = "";
  mt = mt.concat("  /**\n");
  mt = mt.concat("  * Display a listing of the resource.\n");
  mt = mt.concat("  */\n");
  mt = mt.concat(`  public function index() \n`);
  mt = mt.concat("  {\n");
  mt = mt.concat(`   echo \"Method name is index\";`);
  //mt += mi
  mt = mt.concat("\n  } \n");
  return mt;
}

export function create() {
  let mt = "";
  mt = mt.concat("  /**\n");
  mt = mt.concat("  * Display a listing of the resource.\n");
  mt = mt.concat("  */\n");
  mt = mt.concat(`  public function create() \n`);
  mt = mt.concat("  {\n");
  mt = mt.concat(`   echo \"Method name is create\";`);
  mt = mt.concat("\n  } \n");
  return mt;
}
export function store() {
  let mt = "";
  mt = mt.concat("  /**\n");
  mt = mt.concat("  * Store a newly created resource in storage.\n");
  mt = mt.concat("  */\n");
  mt = mt.concat(`  public function store(Request $request) \n`);
  mt = mt.concat("  {\n");
  mt = mt.concat(`   echo \"Method name is store\";`);
  mt = mt.concat("\n  } \n");
  return mt;
}
export function update() {
  let mt = "";
  mt = mt.concat("  /**\n");
  mt = mt.concat("  * Update the specified resource in storage.\n");
  mt = mt.concat("  */\n");
  mt = mt.concat(`  public function update(Request $request, string $id) \n`);
  mt = mt.concat("  {\n");
  mt = mt.concat(`   echo \"Method name is update\";`);
  mt = mt.concat("\n  } \n");
  return mt;
}
export function edit() {
  let mt = "";
  mt = mt.concat("  /**\n");
  mt = mt.concat("  * Show the form for editing the specified resource.\n");
  mt = mt.concat("  */\n");
  mt = mt.concat(`  public function edit(string $id) \n`);
  mt = mt.concat("  {\n");
  mt = mt.concat(`   echo \"Method name is edit\";`);
  mt = mt.concat("\n  } \n");
  return mt;
}
export function show() {
  let mt = "";
  mt = mt.concat("  /**\n");
  mt = mt.concat("  * Display the specified resource.\n");
  mt = mt.concat("  */\n");
  mt = mt.concat(`  public function show(string $id) \n`);
  mt = mt.concat("  {\n");
  mt = mt.concat(`   echo \"Method name is show\";`);
  mt = mt.concat("\n  } \n");
  return mt;
}
export function destroy() {
  let mt = "";
  mt = mt.concat("  /**\n");
  mt = mt.concat("  * Remove the specified resource from storage.\n");
  mt = mt.concat("  */\n");
  mt = mt.concat(`  public function destroy(string $id) \n`);
  mt = mt.concat("  {\n");
  mt = mt.concat(`   echo \"Method name is destroy\";`);
  mt = mt.concat("\n  } \n");
  return mt;
}
