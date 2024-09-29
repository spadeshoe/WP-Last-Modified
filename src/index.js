console.log("howdy world");
console.log("last modified: ", lastModified);
import { registerPlugin } from "@wordpress/plugins";
import { PluginPostStatusInfo } from "@wordpress/editor";

const PluginPostStatusInfoTest = () => (
  <PluginPostStatusInfo>
    {/* There doesn't seem to be a way to reuse the post panel components, Maybe there is, but I can't figure it out. See:  wp-includes/js/dist/editor.js lines 11964 and 1521 and PostPanelRow
    https://github.com/WordPress/gutenberg/pull/56238/commits/671de8af58ac125b9cb8bb0e7e1f3650919e0adc
    
    */}

    <div
      data-wp-c16t="true"
      data-wp-component="HStack"
      class="components-flex components-h-stack editor-post-panel__row css-13b06dz e19lxcc00"
    >
      <div class="editor-post-panel__row-label">Last Modified User:</div>
      <div class="editor-post-panel__row-control">
        <div
          class="components-dropdown editor-post-order__panel-dropdown"
          tabindex="-1"
        >
          {lastModified.user}
        </div>
      </div>
    </div>
  </PluginPostStatusInfo>
);

registerPlugin("post-status-info-test", { render: PluginPostStatusInfoTest });
