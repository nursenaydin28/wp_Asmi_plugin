import { registerBlockType } from "@wordpress/blocks";
import { name } from "./block.json";

registerBlockType(name, {
  edit() {
    return (
      <>
        <p>This is me yagyaraj.</p>
      </>
    );
  },
});
